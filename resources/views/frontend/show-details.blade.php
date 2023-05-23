@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-8">
            <!-- second accordiant open -->
            <div id="accordion">
                @foreach($arr_result as $result)
                
                    <div class="card mt-1">
                        <div class="card-header" id="headingOne-{{ $result->id }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse"
                                    data-target="#collapseOne-{{ $result->id }}" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    {{$result->title}}
                                </button> <i class="fa fa-angle-double-down float-right text-danger"></i>
                            </h5>
                        </div>

                        <div id="collapseOne-{{ $result->id }}" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordion"> 
                            <div class="card-body">
                            {{$result->content}}
                            </div>
                        </div>
                    </div>
                      
                    
                @endforeach    
            </div>
            <!-- second accordiant close -->
        </div>
        <div class="col-sm-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2> view details </h2>
                </div>
                <div class="card-body">
                    <span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi magni autem exercitationem obcaecati 
                        iure, inventore doloremque similique eos dignissimos nemo rerum reprehenderit aliquid incidunt? Eaque atque 
                        qui sequi repellendus ut.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
