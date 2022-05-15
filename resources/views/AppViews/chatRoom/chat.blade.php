<div id="chat-circle" role="button" >
    <div class="a-round-img chatbot-icon" style="background-image:url('{{ asset('img/robot.jpg') }}')"></div>
</div>

<div id="chatting-room" class="chat-box">
    <div class="chat-box-content" style="background-image:url('{{ asset('img/chatbg06.jpg') }}');">
        <div class="chat-box-header">
            IARA.exe 
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

          </div>
          <div class="chat-footer">
                <div class="a-input-group mb-05 pt-05">
                    <span role="button" class="a-input-button"><i class="far fa-paper-plane"></i></span>
                    <textarea class="a-input a-borderless text-input-chat pr-2" placeholder="Say us something ..." data-route="{{ route('chat.demand') }}"></textarea>
                </div> 
          </div>
    </div>
</div>