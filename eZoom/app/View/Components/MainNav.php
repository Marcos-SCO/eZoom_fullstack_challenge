<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainNav extends Component
{
    public $ulLinksArray;
    public $socialMediaLinks;

    function defaultSocialLinks()
    {
        $whatsAppUrl =
            'https://api.whatsapp.com/send?phone=5511916459334&text=Olá+Marcos+tudo+bem?+Vim+por+meio+do+link+no+site+eZoom+e+gostaria+de+conversar+com+você.';

        $linkedinUrl = 'https://www.linkedin.com/in/marcos-sco/';

        $socialIconsPath = 'svg/icons/social';

        $socialMediaLinks = [
            ['https://github.com/Marcos-SCO' => 'facebook', 'path' => $socialIconsPath],
            [$whatsAppUrl => 'instagram', 'path' => $socialIconsPath],
            [$whatsAppUrl => 'youtube', 'path' => $socialIconsPath],
            [$linkedinUrl => 'tiktok', 'path' => $socialIconsPath],
            [$linkedinUrl => 'mic', 'path' => $socialIconsPath],
            [$linkedinUrl => 'linkedin', 'path' => $socialIconsPath],
        ];

        return $socialMediaLinks;
    }

    /**
     * Create a new component instance.
     */
    public function __construct($ulLinksArrayParams = [], $socialMediaLinks = [])
    {
        $haveUlParams = sizeof($ulLinksArrayParams) > 0;

        $haveSocialMediaParams =
            sizeof($socialMediaLinks) > 0;

        $this->ulLinksArray = [
            ['#' => 'Home'],
            ['#' => 'About'],
            ['#' => 'Contact'],
        ];

        if ($haveUlParams) {
            $this->ulLinksArray = $ulLinksArrayParams;
        }

        $this->socialMediaLinks = $this->defaultSocialLinks();;

        if ($haveSocialMediaParams) {
            $this->socialMediaLinks = $ulLinksArrayParams;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-nav');
    }
}
