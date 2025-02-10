<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
</body>
</html> -->



<title>Statistical</title>
@extends('layouts/default')

{{-- Page title --}}
@section('title')
  Statistical
@parent
@stop




{{-- Page content --}}
@section('content')

<div class="row">
  <!-- Case PC -->
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body" style="font-weight: 500;text-transform: uppercase;font-size: 16px;">1. Case PC</div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>
              <tr>
              <th scope="col" style="font-weight: normal;">#</th>
              <th scope="col" style="font-weight: normal;">Ready to Deploy</th>
              <th scope="col" style="font-weight: normal;">Deployed</th>
              <th scope="col" style="font-weight: normal;">Archived</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <th scope="row" style="font-weight: normal;">Seta International</th>
              <td>{{ $count_st_1 }}</td>
              <td>{{ $count_st_2 }}</td>
              <td>{{ $count_st_3 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">BlueOC</th>
              <td>{{ $count_bl_1 }}</td>
              <td>{{ $count_bl_2 }}</td>
              <td>{{ $count_bl_3 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">AI Cycle</th>
              <td>{{ $count_ai_1 }}</td>
              <td>{{ $count_ai_2 }}</td>
              <td>{{ $count_ai_3 }}</td>
              </tr>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>

  <!-- Màn hình -->
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body" style="font-weight: 500;text-transform: uppercase;font-size: 16px;">2. Monitor</div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>
              <tr>
              <th scope="col" style="font-weight: normal;">#</th>
              <th scope="col" style="font-weight: normal;">Ready to Deploy</th>
              <th scope="col" style="font-weight: normal;">Deployed</th>
              <th scope="col" style="font-weight: normal;">Archived</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <th scope="row" style="font-weight: normal;">Seta International</th>
              <td>{{ $count_st_4 }}</td>
              <td>{{ $count_st_5 }}</td>
              <td>{{ $count_st_6 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">BlueOC</th>
              <td>{{ $count_bl_4 }}</td>
              <td>{{ $count_bl_5 }}</td>
              <td>{{ $count_bl_6 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">AI Cycle</th>
              <td>{{ $count_ai_4}}</td>
              <td>{{ $count_ai_5}}</td>
              <td>{{ $count_ai_6}}</td>
              </tr>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
  <!-- Bàn phím -->
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body" style="font-weight: 500;text-transform: uppercase;font-size: 16px;">3. Key board</div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>
              <tr>
              <th scope="col" style="font-weight: normal;">#</th>
              <th scope="col" style="font-weight: normal;">Ready to Deploy</th>
              <th scope="col" style="font-weight: normal;">Deployed</th>
              <th scope="col" style="font-weight: normal;">Archived</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <th scope="row" style="font-weight: normal;">Seta International</th>
              <td>{{ $count_st_7 }}</td>
              <td>{{ $count_st_8 }}</td>
              <td>{{ $count_st_9 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">BlueOC</th>
              <td>{{ $count_bl_7 }}</td>
              <td>{{ $count_bl_8 }}</td>
              <td>{{ $count_bl_9 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">AI Cycle</th>
              <td>{{ $count_ai_7 }}</td>
              <td>{{ $count_ai_8 }}</td>
              <td>{{ $count_ai_9 }}</td>
              </tr>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>

  <!-- Chuột -->
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body" style="font-weight: 500;text-transform: uppercase;font-size: 16px;">4. Mouse</div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>
              <tr>
              <th scope="col" style="font-weight: normal;">#</th>
              <th scope="col" style="font-weight: normal;">Ready to Deploy</th>
              <th scope="col" style="font-weight: normal;">Deployed</th>
              <th scope="col" style="font-weight: normal;">Archived</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <th scope="row" style="font-weight: normal;">Seta International</th>
              <td>{{ $count_st_10 }}</td>
              <td>{{ $count_st_11 }}</td>
              <td>{{ $count_st_12 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">BlueOC</th>
              <td>{{ $count_bl_10 }}</td>
              <td>{{ $count_bl_11 }}</td>
              <td>{{ $count_bl_12 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">AI Cycle</th>
              <td>{{ $count_ai_10 }}</td>
              <td>{{ $count_ai_11 }}</td>
              <td>{{ $count_ai_12 }}</td>
              </tr>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
 
  <!-- Tai nghe -->
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body" style="font-weight: 500;text-transform: uppercase;font-size: 16px;">5. Head phone</div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>
              <tr>
              <th scope="col" style="font-weight: normal;">#</th>
              <th scope="col" style="font-weight: normal;">Ready to Deploy</th>
              <th scope="col" style="font-weight: normal;">Deployed</th>
              <th scope="col" style="font-weight: normal;">Archived</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <th scope="row" style="font-weight: normal;">Seta International</th>
              <td>{{ $count_st_13 }}</td>
              <td>{{ $count_st_14 }}</td>
              <td>{{ $count_st_15 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">BlueOC</th>
              <td>{{ $count_bl_13 }}</td>
              <td>{{ $count_bl_14 }}</td>
              <td>{{ $count_bl_15 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">AI Cycle</th>
              <td>{{ $count_ai_13 }}</td>
              <td>{{ $count_ai_14 }}</td>
              <td>{{ $count_ai_15 }}</td>
              </tr>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>

  <!-- Laptop -->
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body" style="font-weight: 500;text-transform: uppercase;font-size: 16px;">6. Laptop</div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>
              <tr>
              <th scope="col" style="font-weight: normal;">#</th>
              <th scope="col" style="font-weight: normal;">Ready to Deploy</th>
              <th scope="col" style="font-weight: normal;">Deployed</th>
              <th scope="col" style="font-weight: normal;">Archived</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <th scope="row" style="font-weight: normal;">Seta International</th>
              <td>{{ $count_st_16 }}</td>
              <td>{{ $count_st_17 }}</td>
              <td>{{ $count_st_18 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">BlueOC</th>
              <td>{{ $count_bl_16 }}</td>
              <td>{{ $count_bl_17 }}</td>
              <td>{{ $count_bl_18 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">AI Cycle</th>
              <td>{{ $count_ai_16 }}</td>
              <td>{{ $count_ai_17 }}</td>
              <td>{{ $count_ai_18 }}</td>
              </tr>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>

  <!-- Macbook -->
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body" style="font-weight: 500;text-transform: uppercase;font-size: 16px;">7. Macbook</div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>
              <tr>
              <th scope="col" style="font-weight: normal;">#</th>
              <th scope="col" style="font-weight: normal;">Ready to Deploy</th>
              <th scope="col" style="font-weight: normal;">Deployed</th>
              <th scope="col" style="font-weight: normal;">Archived</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <th scope="row" style="font-weight: normal;">Seta International</th>
              <td>{{ $count_st_19 }}</td>
              <td>{{ $count_st_20 }}</td>
              <td>{{ $count_st_21 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">BlueOC</th>
              <td>{{ $count_bl_19 }}</td>
              <td>{{ $count_bl_20 }}</td>
              <td>{{ $count_bl_21 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">AI Cycle</th>
              <td>{{ $count_ai_19 }}</td>
              <td>{{ $count_ai_20 }}</td>
              <td>{{ $count_ai_21 }}</td>
              </tr>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>

  <!-- Mac Mini -->
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body" style="font-weight: 500;text-transform: uppercase;font-size: 16px;">8. Mac Mini</div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>
              <tr>
              <th scope="col" style="font-weight: normal;">#</th>
              <th scope="col" style="font-weight: normal;">Ready to Deploy</th>
              <th scope="col" style="font-weight: normal;">Deployed</th>
              <th scope="col" style="font-weight: normal;">Archived</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <th scope="row" style="font-weight: normal;">Seta International</th>
              <td>{{ $count_st_22 }}</td>
              <td>{{ $count_st_23 }}</td>
              <td>{{ $count_st_24 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">BlueOC</th>
              <td>{{ $count_bl_22 }}</td>
              <td>{{ $count_bl_23 }}</td>
              <td>{{ $count_bl_24 }}</td>
              </tr>
              <tr>
              <th scope="row" style="font-weight: normal;">AI Cycle</th>
              <td>{{ $count_ai_22 }}</td>
              <td>{{ $count_ai_23 }}</td>
              <td>{{ $count_ai_24 }}</td>
              </tr>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>


@stop

@section('moar_scripts')
  @include ('partials.bootstrap-table',
      ['exportFile' => 'category-export',
      'search' => true,
      'columns' => \App\Presenters\CategoryPresenter::dataTableLayout()
  ])
@stop

