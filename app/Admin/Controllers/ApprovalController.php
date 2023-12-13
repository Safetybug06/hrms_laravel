<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Approval;

class ApprovalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Approval';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Approval());

        $grid->column('id', __('Id'));
        $grid->column('empid', __('Empid'));
        $grid->column('app_status', __('App status'));
        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('gender', __('Gender'));
        $grid->column('dob', __('Dob'));
        $grid->column('address', __('Address'));
        $grid->column('city', __('City'));
        $grid->column('country', __('Country'));
        $grid->column('phone_number', __('Phone number'));
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
        $show = new Show(Approval::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('empid', __('Empid'));
        $show->field('app_status', __('App status'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('gender', __('Gender'));
        $show->field('dob', __('Dob'));
        $show->field('address', __('Address'));
        $show->field('city', __('City'));
        $show->field('country', __('Country'));
        $show->field('phone_number', __('Phone number'));
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
        $form = new Form(new Approval());

        $form->number('empid', __('Empid'));
        $form->number('app_status', __('App status'));
        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->text('gender', __('Gender'));
        $form->date('dob', __('Dob'))->default(date('Y-m-d'));
        $form->text('address', __('Address'));
        $form->text('city', __('City'));
        $form->text('country', __('Country'));
        $form->number('phone_number', __('Phone number'));

        return $form;
    }
}
