@extends('include.layout')

@section('title_page', 'Dashboard')

@section('content')
    <div id="content-page">

        <div id="chat-circle" role="button" >
            <div class="a-round-img chatbot-icon" style="background-image:url('{{ asset('img/robot.jpg') }}')"></div>
        </div>

        <div id="chatting-room" class="chat-box">
            <div class="chat-box-content" style="background-image:url('{{ asset('img/chatbg06.jpg') }}');">
                <div class="chat-box-header">
                    IARA.exe 
                    {{-- <span style="font-size:10px;">(Intelligence Artificielle de Recherche d'Applications)</span> --}}
                  </div>
                  <div id="chat-box-body" class="chat-box-body">

                    <div class="bot-line">
                        <div class="bot-line-icon">
                            <div role="button" class="a-round-img-sm" style="background-image:url('{{ asset('img/robot.jpg') }}')"></div>
                        </div>
                        <div class="bot-bubble">
                            &#128075; Bonjour ! Que souhaitez vous faire aujourd'hui ?
                        </div>
                    </div>

                    {{-- <div class="user-line">
                        <div class="user-bubble">
                            Je voudrais réaménager un prêt pour mon client.
                        </div>
                        <div class="bot-line-icon">
                            <div role="button" class="a-round-img-sm" style="background-image:url('{{ asset('img/userDefault.jpg') }}')"></div>
                        </div>
                    </div> --}}

                    {{-- <div class="bot-line">
                        <div class="bot-line-icon">
                            <div role="button" class="a-round-img-sm" style="background-image:url('{{ asset('img/robot.jpg') }}')"></div>
                        </div>
                        <div class="bot-bubble">
                            <div class="dots-line">
                                <div class="dots"></div>
                                <div class="dots"></div>
                                <div class="dots"></div>
                            </div>   
                        </div>
                    </div> --}}

                    {{-- <div class="bot-line">
                        <div class="bot-line-icon">
                            <div role="button" class="a-round-img-sm" style="background-image:url('{{ asset('img/robot.jpg') }}')"></div>
                        </div>
                        <div class="bot-bubble">
                            <strong>Dérogation Réaménagement</strong><br />
                            <span class="app-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...</span>
                        </div>
                    </div> --}}
{{-- 
                    <div class="user-line">
                        <div class="user-bubble">
                            La Péri est géniale !
                        </div>
                        <div class="bot-line-icon">
                            <div role="button" class="a-round-img-sm" style="background-image:url('{{ asset('img/userDefault.jpg') }}')"></div>
                        </div>
                    </div> --}}

                    {{-- <div class="bot-line">
                        <div class="bot-line-icon">
                            <div role="button" class="a-round-img-sm" style="background-image:url('{{ asset('img/robot.jpg') }}')"></div>
                        </div>
                        <div class="bot-bubble">
                            Avec vous on devient plus fort 🚀<br />
                            Cour sur vous <span class="a-text-danger">&#10084;</span>
                        </div>
                    </div> --}}

                  </div>
                  <div class="chat-footer">
                        <div class="a-input-group mb-05 pt-05">
                            <span role="button" class="a-input-button"><i class="far fa-paper-plane"></i></span>
                            <textarea class="a-input a-borderless text-input-chat pr-2" placeholder="Say us something ..." data-route="{{ route('chat.demand') }}"></textarea>
                        </div> 
                  </div>
            </div>
        </div>

@stop
