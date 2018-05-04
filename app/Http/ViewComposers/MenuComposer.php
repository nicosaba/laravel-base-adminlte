<?php

namespace App\Http\ViewComposers;

use App\UserMenu;
use Illuminate\View\View;
use Sentinel;

class MenuComposer
{

    public function compose(View $view)
    {
        $menuBuilder = []; // Colección
        $user = Sentinel::getUser();
        $headers = UserMenu::where('padre_id',null)->orderBy('orden')->get();
        foreach ($headers as $menu) {

            $menuBuilder[$menu->id]['nombre'] = $menu->nombre;
            $menuBuilder[$menu->id]['icono'] = $menu->icono;
            $actions = UserMenu::where('padre_id',$menu->id)->orderBy('orden')->get();
            // MENU CON TODAS LAS ACCIONES
            if($user->hasAccess($menu->ruta_nombre.".*")){
                foreach ($actions as $action) {
                    $menuBuilder[$menu->id]['accion'][$action->id]['nombre'] = $action->nombre;
                    $menuBuilder[$menu->id]['accion'][$action->id]['ruta'] = $action->ruta_nombre;
                }
            }else{
                foreach ($actions as $action) {
                    if($user->hasAccess($action->ruta_nombre)) {
                        $menuBuilder[$menu->id]['accion'][$action->id]['nombre'] = $action->nombre;
                        $menuBuilder[$menu->id]['accion'][$action->id]['ruta'] = $action->ruta_nombre;
                    }
                }
            }
            // si no tiene acciones en ese menu lo borro para que no se muestre
            if(!key_exists('accion',$menuBuilder[$menu->id])){
                unset($menuBuilder[$menu->id]);
            }
        }

        $view->with('menuBuilder', $menuBuilder);
    }

}