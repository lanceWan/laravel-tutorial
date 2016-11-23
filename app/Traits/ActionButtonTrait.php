<?php
namespace App\Traits;
trait ActionButtonTrait{
  /**
   * 修改权限按钮
   * @author 晚黎
   * @date   2016-11-24
   * @return [type]     [description]
   */
  public function getEditActionButton()
  {
      return '<a class="btn btn-warning btn-xs" href="'.url('admin/'.$this->action.'/'.$this->id.'/edit').'"><i class="fa fa-edit"></i> 修改</a> ';
  }
  /**
   * 查看按钮
   * @author 晚黎
   * @date   2016-11-24
   * @return [type]     [description]
   */
  public function getShowActionButton()
  {
      return '<a class="btn btn-info btn-xs" href="'.url('admin/'.$this->action.'/'.$this->id).'"><i class="fa fa-edit"></i> 查看</a> ';
  }
  /**
   * 删除按钮
   * @author 晚黎
   * @date   2016-11-24
   * @return [type]     [description]
   */
  public function getDestroyActionButton()
  {
      return '<a class="btn btn-danger btn-xs" href="'.url('admin/'.$this->action.'/'.$this->id).'"><i class="fa fa-edit"></i> 删除</a> ';
  }

  /**
   * 获取按钮
   * @author 晚黎
   * @date   2016-11-24
   * @return [type]     [description]
   */
  public function getActionButton()
  {
      return $this->getShowActionButton().
              $this->getEditActionButton().
              $this->getDestroyActionButton();
  }
}
