<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Calendar;

class CalendarController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Calendar';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Calendar());

        $grid->column('id', __('Id'));
        $grid->column('evt_start', __('Evt start'));
        $grid->column('evt_end', __('Evt end'));
        $grid->column('evt_text', __('Evt text'));
        $grid->column('evt_color', __('Evt color'));
        $grid->column('evt_bg', __('Evt bg'));
        $grid->column('evt_category', __('Evt category'));
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
        $show = new Show(Calendar::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('evt_start', __('Evt start'));
        $show->field('evt_end', __('Evt end'));
        $show->field('evt_text', __('Evt text'));
        $show->field('evt_color', __('Evt color'));
        $show->field('evt_bg', __('Evt bg'));
        $show->field('evt_category', __('Evt category'));
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
        $form = new Form(new Calendar());

        $form->date('evt_start', __('Evt start'))->default(date('Y-m-d'));
        $form->date('evt_end', __('Evt end'))->default(date('Y-m-d'));
        $form->text('evt_text', __('Evt text'));
        $form->text('evt_color', __('Evt color'));
        $form->text('evt_bg', __('Evt bg'));
        $form->number('evt_category', __('Evt category'));

        return $form;
    }
}
