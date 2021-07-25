<?php
namespace App\Http\View\Composers;
use App\Repositories\UserRepository;
use Illuminate\View\View;

class SocialComposer{
    // public function compose(View $view){
    //     $social=[
    //         'fb' => '##################3',
    //         'Twiter' => '##################3' ,
    //         'gh' => '##################3'
    //     ];
    //     $view->with('social',$social);
    // }

    public function compose(View $view)
    {
        $socials=[
            [
                'route'=>'#',
                'icon1' =>'fas fa-circle fa-stack-2x',
                'icon2'=>'fab fa-twitter fa-stack-1x fa-inverse'
            ],
            [
                'route'=>'#',
                'icon1' =>'fas fa-circle fa-stack-2x',
                'icon2'=>'fab fa-facebook-f fa-stack-1x fa-inverse'
            ],
            [
                'route'=>'#',
                'icon1' =>'fas fa-circle fa-stack-2x',
                'icon2'=>'fab fa-github fa-stack-1x fa-inverse'
            ],
        ];
        $view->with('socials',$socials);
    }
}



