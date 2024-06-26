<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainNav extends Component
{
    public $ulLinksArray;
    public $socialMediaLinks;
    public $whatsAppUrl;
    public $githubUrl;
    public $linkedInUrl;

    function defaultSocialLinks()
    {
        $socialIconsPath = 'svg/icons/social';

        $socialMediaLinks = [
            [$this->githubUrl => 'facebook', 'path' => $socialIconsPath],
            [$this->whatsAppUrl => 'instagram', 'path' => $socialIconsPath],
            [$this->whatsAppUrl => 'youtube', 'path' => $socialIconsPath],
            [$this->linkedInUrl => 'tiktok', 'path' => $socialIconsPath],
            [$this->linkedInUrl => 'mic', 'path' => $socialIconsPath],
            [$this->linkedInUrl => 'linkedin', 'path' => $socialIconsPath],
        ];

        return $socialMediaLinks;
    }

    /**
     * Create a new component instance.
     */
    public function __construct($ulLinksArrayParams = [], $socialMediaLinks = [])
    {
        $this->whatsAppUrl = env('WHATSAPP_ULR_MESSAGE');

        $this->linkedInUrl = env('GITHUB_ULR_MESSAGE');

        $this->githubUrl = env('GITHUB_ULR_MESSAGE');

        $haveUlParams = sizeof($ulLinksArrayParams) > 0;

        $haveSocialMediaParams =
            sizeof($socialMediaLinks) > 0;

        $this->ulLinksArray = [
            [$this->whatsAppUrl => 'Home'],
            [$this->githubUrl => 'About'],
            [$this->linkedInUrl => 'Contact'],
        ];

        if ($haveUlParams) {
            $this->ulLinksArray = $ulLinksArrayParams;
        }

        $this->socialMediaLinks = $this->defaultSocialLinks();

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
