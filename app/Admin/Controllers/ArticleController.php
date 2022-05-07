<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Article;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ArticleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Article(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('type');
            $grid->column('title');
            $grid->column('introduction');
            $grid->column('content');
            $grid->column('visits');
            $grid->column('star');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Article(), function (Show $show) {
            $show->field('id');
            $show->field('type');
            $show->field('title');
            $show->field('introduction');
            $show->field('content');
            $show->field('content_html');
            $show->field('visits');
            $show->field('star');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Article(), function (Form $form) {
            $form->display('id');
            $form->select('type')
                ->options('/api/category')
                ->rules('required');

            $form->text('title')->rules('required');
            $form->markdown('content')->rules('required');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
