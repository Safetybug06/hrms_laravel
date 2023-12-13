<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Employee;

class EmployeeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Employee';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Employee());

        $grid->column('id', __('Id'));
        $grid->column('dept_id', __('Dept id'));
        $grid->iamge('profile_img', __('Profile img'));
        
        // $grid->column('profile_img')->image();
        $grid->column('empid', __('Empid'));
        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('email_id', __('Email id'));
        $grid->column('password', __('Password'));
        $grid->column('gender', __('Gender'));
        $grid->column('dob', __('Dob'));
        $grid->column('department', __('Department'));
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
        $show = new Show(Employee::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('dept_id', __('Dept id'));
        $show->field('profile_img', __('Profile img'))->image();
        // $grid->column('picture')->image();
        $show->field('empid', __('Empid'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('email_id', __('Email id'));
        $show->field('password', __('Password'));
        $show->field('gender', __('Gender'));
        $show->field('dob', __('Dob'));
        $show->field('department', __('Department'));
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
        $form = new Form(new Employee());

        $form->number('dept_id', __('Dept id'));
        $form->text('profile_img', __('Profile img'));
        $form->number('empid', __('Empid'));
        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->text('email_id', __('Email id'));
        $form->password('password', __('Password'));
        $form->text('gender', __('Gender'));
        $form->date('dob', __('Dob'))->default(date('Y-m-d'));
        $form->text('department', __('Department'));
        $form->text('address', __('Address'));
        $form->text('city', __('City'));
        $form->text('country', __('Country'))->default('India');
        $form->number('phone_number', __('Phone number'));

        return $form;
    }
}
