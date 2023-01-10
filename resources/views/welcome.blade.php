@include('layout.header')

<input type="checkbox" id="drawer-toggle" name="drawer-toggle" />
<label for="drawer-toggle" id="drawer-toggle-label"></label>
<header>Teste e2Payment Laravel por <strong>BNFLIVE10</strong></header>
<nav id="drawer" class="bg-dark">
    <ul>
        <li><a href="#">Inicio</a></li>
    </ul>
</nav>
<div id="page-content">
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6 offset-3">
                    @if (Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pagamento</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" name="form-contact" action="{{ route('makepayment') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Valor</label>
                                    <input type="text" name="valor" class="form-control money2" id="valor">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">84/85</label>
                                    <input type="text" name="contato" class="form-control phone" id="contato">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectBorder">Indique a Referencia</code></label>
                                    <select class="custom-select form-control-border" name="referencia" id="referencia">
                                        <option value="Selecionar">Selecionar</option>
                                        <option value="PagarEncomenda">Pagar Encomenda</option>
                                        <option value="TestePagamento">Teste Pagamento</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

</div>

@include('layout.footer')
