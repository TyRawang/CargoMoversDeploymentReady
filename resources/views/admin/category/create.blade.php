@extends('layouts.backend.app')

@section('title')
Subject Manager | Dashboard
@endsection

@push('css')
<link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
@section('content')
<div class="container-fluid"> 
  <!-- Vertical Layout | With Floating Label -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
          <h2> Subject Manager </h2>
        </div>
        <div class="body">
          <form enctype="multipart/form-data" method="POST" action="{{ route('category.store') }}">
            @csrf
            <div class="row clearfix">
              <div class="form-group {{ $errors->has('p_id') ? 'has-error' : '' }} ">
                <div class="col-md-5">
                  <select name="p_id"  class="form-control show-tick" data-live-search="true">
                    <option value="">Select category</option>
                    
                    
                                    @foreach($category as $val)
                                    
                    
                    <option value="{{ $val->id }}">{{ $val->category_name }}</option>
                    
                    
                                    @foreach($subcategory as $child)
                                     @if($val->id==$child->p_id)
                                    
                    
                    <option value="{{ $child->id }}">&nbsp&nbsp-->{{ $child->category_name }}</option>
                    
                    
                                      @endif
                                      @endforeach
                                      @endforeach
                                   
                  
                  </select>
                  @if($errors->has('p_id'))
                  <label for="" class="error"> {{ $errors->first('p_id') }} </label>
                  @endif </div>
              </div>
            </div>
            <div class="row clearfix">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="form-line {{ $errors->has('category_name') ? 'focused error' : '' }}">
                    <label for="category_name">Title</label>
                    <input type="text" value="" name="category_name" class="form-control" placeholder="Category Name" />
                  </div>
                  @if($errors->has('slider_text'))
                  <label for="" class="error"> {{ $errors->first('category_name') }} </label>
                  @endif </div>
              </div>
            </div>
            <div class="row clearfix">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="form-line {{ $errors->has('category_name') ? 'focused error' : '' }}">
                    <label for="category_name">subcatname</label>
                    <input type="text" value="" name="subcatname" class="form-control" placeholder="Category Name" />
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
            
            
            <div class="row clearfix">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="pdf">Image</label>
                  <input type="file" name="image" >
                  @if($errors->has('image'))
                  <label id="pdf-error" class="error"> {{ $errors->first('image') }} </label>
                  @endif </div>
              </div>
            </div>
            
            
            
            
                   <div class="row clearfix">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="pdf">homeimage</label>
                  <input type="file" name="homeimage" >
                  @if($errors->has('homeimage'))
                  <label id="pdf-error" class="error"> {{ $errors->first('homeimage') }} </label>
                  @endif </div>
              </div>
            </div>
            
            
            
            
            
            
            
            
            <div class="row clearfix">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="form-line {{ $errors->has('meta_tag_title') ? 'focused error' : '' }}">
                    <label for="meta_tag_title">Meta Tag Title</label>
                    <input type="text" value="" name="meta_tag_title" class="form-control" placeholder="Meta Tag Title" />
                  </div>
                  @if($errors->has('slider_text'))
                  <label for="" class="error"> {{ $errors->first('meta_tag_title') }} </label>
                  @endif </div>
              </div>
            </div>
            <div class="row clearfix">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="form-line {{ $errors->has('meta_tag_description') ? 'focused error' : '' }}">
                    <label for="meta_tag_description">Meta Tag Description</label>
                    <input type="text" value="" name="meta_tag_description" class="form-control" placeholder="Meta Tag Description" />
                  </div>
                  @if($errors->has('meta_tag_description'))
                  <label for="" class="error"> {{ $errors->first('meta_tag_description') }} </label>
                  @endif </div>
              </div>
            </div>
            <div class="row clearfix">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="form-line {{ $errors->has('meta_tag_keyword') ? 'focused error' : '' }}">
                    <label for="Meta Tag Keywords">Meta Tag Keyword</label>
                    <input type="text" value="" name="meta_tag_keyword" class="form-control" placeholder="Meta Tag Keyword" />
                  </div>
                  @if($errors->has('meta_tag_keyword'))
                  <label for="" class="error"> {{ $errors->first('meta_tag_keyword') }} </label>
                  @endif </div>
              </div>
            </div>
            <div class="row clearfix">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="banner_text">Description</label>
                  <textarea name="description"   rows="4" class="form-control no-resize" id="tinymce"></textarea>
                </div>
              </div>
            </div>
            
            
            
            
                        <div class="row clearfix">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="banner_text">Shortdescription</label>
                  <textarea name="shortdescription"   rows="4" class="form-control no-resize" id="tinymce"></textarea>
                </div>
              </div>
            </div>
            
            
            
            
            
            
            <div class="row clearfix">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-line {{ $errors->has('order_by_cat') ? 'focused error' : '' }}">
                    <label for="order_by_cat">Order by position</label>
                    <input type="text" value="" name="order_by_cat" class="form-control" placeholder="Order by position" />
                  </div>
                  @if($errors->has('slider_text'))
                  <label for="" class="error"> {{ $errors->first('order_by_cat') }} </label>
                  @endif </div>
              </div>
            </div>
            <div class="row clearfix">
              <div class="col-sm-3">
                <label for="">IsActive</label>
                <div class="switch">
                  <label>
                    <input type="checkbox" name="isActive" value="1" checked="checked">
                    <span class="lever switch-col-blue"></span></label>
                </div>
              </div>
            </div>
            <a href="{{ route('category.index') }}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Vertical Layout | With Floating Label --> 
  
</div>
@endsection

@push('js')
@endpush 