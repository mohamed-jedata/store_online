@extends('includes/layout')

@section("title")


@section('content')

<div class="add-product ">

<h1 class="text-center">Modifier un Produit</h1>

<form method="POST" action="" enctype="multipart/form-data">
    @csrf

    <div class="form-group row justify-content-md-center">
        <label for="name" class="col-sm-2 col-form-label">Nom de Produit</label>
        <div class="col-sm-6">
        <input type="text" name="name" class="form-control" id="name">
        </div>
    </div>

    <div class="form-group row justify-content-md-center">
        <label for="price" class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-6">
        <input type="text" name="price" class="form-control" id="price">
        </div>
    </div>

    <div class="form-group row justify-content-md-center">
        <label for="stock" class="col-sm-2 col-form-label">Stock</label>
        <div class="col-sm-6">
        <input type="text" name="stock" class="form-control" id="stock">
        </div>
    </div>

    <div class="form-group row justify-content-md-center">
        <label for="country" class="col-sm-2 col-form-label">Country</label>
        <div class="col-sm-6">
        <input type="text" name="country" class="form-control" id="country">
        </div>
    </div>

    <div class="form-group row justify-content-md-center">
        <label for="cat_id" class="col-sm-2 col-form-label">Catalogue</label>
        <div class="col-sm-6">
        <select name="cat_id" class="form-control" id="cat_id">
        <option value="">-- Select Category --</option>
        
        </select>
        </div>
    </div>

    <div class="form-group row justify-content-md-center">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-6">
        <textarea type="text" name="description" rows="5" class="form-control" id="description"></textarea>
        </div>
    </div>

    <div class="form-group row justify-content-md-center">
        <label for="main_image" class="col-sm-2 col-form-label">Image Principal</label>
        <div class="col-sm-6">
        <input type="file" name="main_image" class="form-control btn btn-light" id="main_image">
        </div>
    </div>

    <div class="form-group row justify-content-md-center">
        <label for="images" class="col-sm-2 col-form-label">Autres Images</label>
        <div class="col-sm-6">
        <input type="file" name="images[]" multiple class="form-control btn btn-light" id="images">
        </div>
    </div>


    <div class="form-group row justify-content-md-center">
        <label for="visible" class="col-sm-2 col-form-label">Visible</label>
        <div class="col-sm-6">
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="visible" id="falseV" value="0" >
            <label class="form-check-label" for="falseV">False</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="visible" id="trueV" value="1" checked>
            <label class="form-check-label" for="trueV">True</label>
            </div>
        </div>
    </div>

    <div class="form-group row justify-content-md-center">
        <label for="allow_comments" class="col-sm-2 col-form-label">Autoriser les Commenaires</label>
        <div class="col-sm-6">
        
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="allow_comments" id="falseAC" value="0">
            <label class="form-check-label" for="falseAC">False</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="allow_comments" id="trueAC" value="1" checked>
            <label class="form-check-label" for="trueAC">True</label>
            </div>
        </div>
    </div>


    <div class="form-group row justify-content-md-center">
        <label for="tags" class="col-sm-2 col-form-label">Tags</label>
        <div class="col-sm-6">
        <input type="text" name="tags" class="form-control" id="tags">
        <small class="text-muted">ex : PC,Accessoirs,Games</small>
        </div>
    </div>


    <div class="form-group row justify-content-md-center">
        <div class="col-sm-4">
        <button type="submit" class="btn btn-primary pt-0 pb-0"><i class="fas fa-plus"></i> Ajouter</button>
        </div>
    </div>
</form>

</div>

@endsection