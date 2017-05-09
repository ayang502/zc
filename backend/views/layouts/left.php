<?php
use yii\helpers\Html;
use mdm\admin\components\MenuHelper as MenuHelper;

/* @var $this \yii\web\View */
/* @var $content string */

$controller = $this->context;
//$menus = $controller->module->menus;


$callback = function ($menu) {
    return [
        'label' => $menu['name'],
        'url' => [$menu['route']],
        'options' => $menu['data'],
        'items' => $menu['children'],
    ];
};
$menus = MenuHelper::getassignedMenu(Yii::$app->user->id, null, $callback);
$route = trim($controller->route);
$pathinfo = pathinfo($route);
$dirname = $pathinfo['dirname'];
$this->params['nav-items'] = $menus;
?>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
            <!--li>
                <a href="#"><i class="fa fa-gear fa-fw active"></i> 系统管理<span class="fa arrow"></span></a>
            </li-->
            <?php
            foreach ($menus as $items) {
                $html = '<li>';
                $label = Html::encode($items['label']);
                if (isset($items['options'])) {
                    $label = $items['options'] . $label;
                }
                $html .= Html::a($label, $items['url'], ['class' => 'active']);
                if (is_array($items['items'])) {
                    $html .= '<ul class="nav nav-second-level">';
                    foreach ($items['items'] as $menu) {
                        $html .= '<li>';
                        $label = Html::encode($menu['label']);
                        if (isset($menu['data'])) {
                            $label = $menu['data'] . $menu['data'];
                        }
                        $path = pathinfo(trim($menu['url'][0], '/'));
                        $cur = $path['dirname'];
                        $active = strpos($dirname, $cur) === 0 ? ' active ' : '';
                        $html .= Html::a($label, $menu['url'], ['class' => $active,]);
                        $html .= '</li>';
                    }
                    $html .= '</ul>';
                }
                $html .='</li>';
                $menuHtml[] = $html;
            }
            echo join("\n",$menuHtml);
           ?>
        </ul>
    </div>
</div>
