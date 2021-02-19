<?php

namespace App\Admin\Controllers;

use App\Models\Movie;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MovieController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Movie';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Movie());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('released', __('Released'));
        $grid->column('plot', __('Plot'));
        $grid->column('runtime', __('Runtime'));
        $grid->column('poster', __('Poster'));
        $grid->column('status', __('Status'));
        $grid->column('imdbID', __('ImdbID'));
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
        $show = new Show(Movie::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('released', __('Released'));
        $show->field('plot', __('Plot'));
        $show->field('runtime', __('Runtime'));
        $show->field('poster', __('Poster'));
        $show->field('status', __('Status'));
        $show->field('imdbID', __('ImdbID'));
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
        $form = new Form(new Movie());

        // $form->text('title', __('Title'));
        $form->text('released', __('Released'));
        $form->textarea('plot', __('Plot'));
        $form->text('runtime', __('Runtime'));
        $form->textarea('poster', __('Poster'));
        $form->switch('status', __('Status'));
        $form->text('imdbID', __('ImdbID'));

        return $form;
    }
}
