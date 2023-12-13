<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Leaves;

class LeavesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Leaves';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Leaves());

        $grid->column('id', __('Id'));
        $grid->column('empid', __('Empid'));
        $grid->column('leave_type', __('Leave type'));
        $grid->column('from_date', __('From date'));
        $grid->column('to_date', __('To date'));
        $grid->column('num_days', __('Num days'));
        $grid->column('desc', __('Desc'));
        $grid->column('admin_remark', __('Admin remark'));
        $grid->column('admin_remark_date', __('Admin remark date'));
        $grid->column('status', __('Status'));
        $grid->column('type', __('Type'));
        $grid->column('admin_read', __('Admin read'));
        $grid->column('emp_read', __('Emp read'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Leaves::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('empid', __('Empid'));
        $show->field('leave_type', __('Leave type'));
        $show->field('from_date', __('From date'));
        $show->field('to_date', __('To date'));
        $show->field('num_days', __('Num days'));
        $show->field('desc', __('Desc'));
        $show->field('admin_remark', __('Admin remark'));
        $show->field('admin_remark_date', __('Admin remark date'));
        $show->field('status', __('Status'));
        $show->field('type', __('Type'));
        $show->field('admin_read', __('Admin read'));
        $show->field('emp_read', __('Emp read'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Leaves());

        $form->number('empid', __('Empid'));
        $form->text('leave_type', __('Leave type'));
        $form->datetime('from_date', __('From date'))->default(date('Y-m-d H:i:s'));
        $form->datetime('to_date', __('To date'))->default(date('Y-m-d H:i:s'));
        $form->decimal('num_days', __('Num days'));
        $form->text('desc', __('Desc'));
        $form->number('admin_remark', __('Admin remark'));
        $form->datetime('admin_remark_date', __('Admin remark date'))->default(date('Y-m-d H:i:s'));
        $form->switch('status', __('Status'));
        $form->number('type', __('Type'));
        $form->switch('admin_read', __('Admin read'));
        $form->switch('emp_read', __('Emp read'));

        return $form;
    }
}
