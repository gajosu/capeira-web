{!!

    \Spatie\Sitemap\Sitemap::create()
        ->add(URL::to('/'), now(), '1.0', 'daily')
        ->add(URL::to('/urbanizacion'), now(), '0.9', 'monthly')
        ->add(URL::to('/nosotros'), now(), '0.8', 'weekly')
        ->add(URL::to('/casas-modelo'), now(), '0.7', 'monthly')
        ->add(URL::to('/servicios'), now(), '0.6', 'weekly')
        ->add(URL::to('/contacto'), now(), '0.5', 'monthly')
        ->render();
!!}