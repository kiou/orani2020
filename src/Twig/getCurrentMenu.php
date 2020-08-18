<?php

    namespace App\Twig;

    use Twig\Extension\AbstractExtension;
    use Twig\TwigFunction;
    use Symfony\Component\HttpFoundation\RequestStack;

    class getCurrentMenu extends AbstractExtension
    {
        private $request;

        public function __construct(RequestStack $request)
        {
            $this->request = $request;
        }

        public function getFunctions()
        {
            return [
                new TwigFunction('getCurrentMenu', [$this, 'getCurrentMenu']),
            ];
        }

        public function getCurrentMenu($pages)
        {
            $current = $this->request->getCurrentRequest()->attributes->get('_route');
            if(in_array($current, $pages)) return 'current';
        }
    }