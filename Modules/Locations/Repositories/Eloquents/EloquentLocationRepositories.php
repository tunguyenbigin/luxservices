<?php namespace Modules\Locations\Repositories\Eloquents;
    use Modules\Locations\Repositories\LocationRepositories;
    use App\Http\Traits\EloquentTrait;
    use Modules\Locations\Entities\Location;
    class EloquentLocationRepositories implements LocationRepositories{
        use EloquentTrait;
        public function __construct(){
            $this->setModel(new Location());
        }
    }
?>