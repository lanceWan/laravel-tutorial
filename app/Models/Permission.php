<?php
namespace App\Models;
use Zizaco\Entrust\EntrustPermission;
use App\Traits\ActionButtonTrait;
class Permission extends EntrustPermission
{
  use ActionButtonTrait;

  private $action = 'permission';
  
  protected $fillable = ['name','display_name','description'];
}
