<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2017/1/19
 * Time: 19:55
 */

namespace App\Admin\Extensions;
use Encore\Admin\Form\Field\Select;

class Category extends Select
{
    protected $view = 'admin.fields.category';
    protected $elementClass = 'category';
    protected $attributes = [
        'data-level'=>'0',
    ];
    protected $source;

    public function source($source){
       $this->source = $source;
    }
    public function render()
    {
        $this->elementClass .= '-'.$this->column;
        $this->script = <<<EOT
                var Man$this->column = {
                        container:$('.$this->elementClass-container'),
                        clearGarbage:function(level){
                            //clear them
                            $('.$this->elementClass').each(function(index,target){
                                     if($(target).data('level') > level) 
                                     {
                                            $(target).remove();
                                     }
                            });
                        },
                        makeSelect:function(level,data){
                             //make select,get the level
                             var newLevel = level + 1;
                             
                             //append select to container
                             var newSelect = '<select class="form-control $this->elementClass" style="width: 100%;" name="$this->column[]" >';
                             newSelect+=this.makeOptions(data);
                             newSelect+="</select>";
                             newSelect = $(newSelect); 
                             newSelect.data('level',newLevel);
                             
                             //inject data
                             newSelect.appendTo(this.container);
                        },
                        makeOptions:function(data){
                            var html = '';
                            for(item in data){
                                html+= '<option value="'+ item + '">' + data[item] + '</option>';
                            }
                            return html;
                        },
                };
                var CategoryEvent$this->column = function(){
                        //get level
                        var level = $(this).data('level');
                        //get select option
                        var value = this.value;
                        Man$this->column.clearGarbage(level);
                        $.get("$this->source/"+value,function(data){
                            if(data.length != 0){
                                Man$this->column.makeSelect(level,data);
                                $('.$this->elementClass').unbind();
                                $('.$this->elementClass').bind('change',CategoryEvent$this->column);
                            }
                        });
                };
                $('.$this->elementClass').change(CategoryEvent$this->column);
EOT;
        return parent::render()->with(['options'=>$this->options]);
    }
}