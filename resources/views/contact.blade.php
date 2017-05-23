@extends('layouts.layout')

@section('content')
        <!-- Contact Us
        ============================================= -->
        <section id="contact" style="margin-top: 50px">
            <div class="container">
                <h2>Envie uma mensagem</h2>
                <hr class="sep">
                <p>Para enviar um pedido de oração, ou uma mensagem preencha o formulário</p>
                <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                    {{ Form::open(array('action' => 'ContactController@postContato', 'role' => 'form', 'method'=>'POST')) }}

                        <div class="form-group">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Mensagem" id="mensagem" name="mensagem"></textarea>
                        </div>
                        @if(Session::has('message'))
                            { Session::get('message') }}
                        @endif
                        <button class="btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
       

@endsection
