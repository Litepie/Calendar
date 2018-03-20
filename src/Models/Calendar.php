<?php

namespace Litepie\Calendar\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\DateFormatter;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\User\Traits\User as UserModel;

class Calendar extends Model
{
    use Filer, SoftDeletes, Hashids, DateFormatter, PresentableTrait, UserModel;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'lavalite.calendar.calendar';

}
