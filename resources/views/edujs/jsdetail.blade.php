
<div class="modal fade" id="modaljsdetail" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{$js->js_title}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <p >{!!$js->js_content!!}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Example</label>
                    <div class="col-sm-10">
                        <pre>
                            <code class="language-markup">
{{$js->js_code}}
                            </code> 
                        </pre>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>