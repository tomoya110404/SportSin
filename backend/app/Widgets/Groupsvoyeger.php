<?php

namespace App\Widgets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Group;
use TCG\Voyager\Widgets\BaseDimmer;

class ProductDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Group::get()->count();
        $string = ‘グループ’;
        return view(‘voyager::dimmer’, array_merge($this->config, [
            ‘icon’ => ‘voyager-bag’,
            ‘text’ => “データベースに{$count}製品存在しています。すべての製品を表示するには下記のボタンをクリックください。“,
            ‘button’ => [
                ‘text’ => ‘すべての製品を表示’,
                ‘link’ => route(‘voyager.group.index’),
                ‘image’ => voyager_asset(‘images/widget-backgrounds/02.jpg’)
            ],
        ]));
    }
  }
?>
