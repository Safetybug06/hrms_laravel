<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Department;

class DepartmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Department';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Department());

        $grid->column('id', __('Id'));
        $grid->column('dept_name', __('Dept name'));
        $grid->column('dept_sname', __('Dept sname'));
        $grid->column('dept_code', __('Dept code'));
        $grid->column('badge', __('Badge'));
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
        $show = new Show(Department::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('dept_name', __('Dept name'));
        $show->field('dept_sname', __('Dept sname'));
        $show->field('dept_code', __('Dept code'));
        $show->field('badge', __('Badge'));
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
        $form = new Form(new Department());

        $form->text('dept_name', __('Dept name'));
        $form->text('dept_sname', __('Dept sname'));
        $form->text('dept_code', __('Dept code'));
        $form->text('badge', __('Badge'));

        return $form;
    }
}
