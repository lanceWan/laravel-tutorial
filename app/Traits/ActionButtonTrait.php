<?php
namespace App\Traits;
trait ActionButtonTrait{
  public function getEditActionButton()
  {
    return '<a href="'.$this->id.'">修改</a>';
  }
}
