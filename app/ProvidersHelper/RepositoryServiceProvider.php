<?php

namespace App\ProvidersHelper;

use App\Repositories\About\AboutInterface;
use App\Repositories\About\AboutRepository;
use App\Repositories\Activities\ActivitiesInterface;
use App\Repositories\Activities\ActivitiesRepository;
use App\Repositories\Admin\AdminInterface;
use App\Repositories\Admin\AdminRepository;

use App\Repositories\Awards\AwardsInterface;
use App\Repositories\Awards\AwardsRepository;
use App\Repositories\Banner\BannerInterface;
use App\Repositories\Banner\BannerRepository;
use App\Repositories\Events\EventsInterface;
use App\Repositories\Events\EventsRepository;
use App\Repositories\Menu\MenuInterface;
use App\Repositories\Menu\MenuRepository;
use App\Repositories\Project\ProjectInterface;
use App\Repositories\Project\ProjectRepository;
use App\Repositories\Publication\PublicationInterface;
use App\Repositories\Publication\PublicationRepository;
use App\Repositories\Rewards\RewardsInterface;
use App\Repositories\Rewards\RewardsRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{


    public function register()
    {

        $this->app->bind(AdminInterface::class,
            AdminRepository::class);
        $this->app->bind(MenuInterface::class,
            MenuRepository::class);
        $this->app->bind(AboutInterface::class,
            AboutRepository::class);
        $this->app->bind(EventsInterface::class,
            EventsRepository::class);
        $this->app->bind(PublicationInterface::class,
            PublicationRepository::class);

        $this->app->bind(BannerInterface::class,
            BannerRepository::class);

        $this->app->bind(ProjectInterface::class,
            ProjectRepository::class);

        $this->app->bind(ActivitiesInterface::class,
            ActivitiesRepository::class);

        $this->app->bind(AwardsInterface::class,
            AwardsRepository::class);

        $this->app->bind(RewardsInterface::class,
            RewardsRepository::class);

    }
}
