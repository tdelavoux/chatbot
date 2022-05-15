<div class="kanban-col mh-1">
    <div class="kanban-col-header pb-05" style="border-color:{{$color}}">
        <label>{{$name}}</label>
        <i class="fa-solid fa-ellipsis"></i>
    </div>

    <div class="kanban-col-body p-1">
        <div class="kanban-card">
            <strong>Titre de la tache</strong>
            <p class="a-text-light">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem enim, pellentesque at scelerisque id, pellentesque vel ante. Proin pellentesque metus metus, viverra fringilla tellus finibus ut.
            </p>
            <div class="ar">
                    <div class="a-round-img-sm" style="background-image:url('{{ asset('img/userDefault2.jpg') }}');"></div>
            </div>
        </div>

        <div class="kanban-card">
            <strong>Titre de la tache</strong>
            <p class="a-text-light">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem enim, pellentesque at scelerisque id, pellentesque vel ante. Proin pellentesque metus metus, viverra fringilla tellus finibus ut.
            </p>
            <div class="ar">
                    <div class="a-round-img-sm" style="background-image:url('{{ asset('img/userDefault.jpg') }}');"></div>
            </div>
        </div>
    </div>
</div>

<style>
    .kanban-col{
        min-width:200px;
        max-width:300px;
    }
    .kanban-col-header{
        display:flex;
        justify-content: space-between;
        border-bottom:solid 2px #fff;
        color:rgb(172, 169, 169);
    }

    .kanban-card{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding:1em;
        margin: 1em 0;
        border: solid 1px rgb(240, 240, 240);
        border-radius: 5px;
        font-size:12px;
        box-shadow: 0px 3px 35px 3px var(--shadow-grey);
    }
</style>