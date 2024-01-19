@extends('layout.generate-layout')
@section('content')
<div class="theme-selection" id="theme-selection">
    {{--header--}}
    <header class="shadow-sm py-3 px-3 px-sm-5 fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <h2>Theme Selection</h2>
            <a href="{{route('generate.selected', ['id'=> 1])}}" class="btn btn-aqua-blue rounded-pill" :disabled="!id" v-if="id">Next</a>
        </div>
    </header>

    <div class="content">
        <div class="container">
            <div class="selection-items">
                <div class="img" @click="selectItem($event, 1)">
                    <img src="{{asset('/images/theme-selection/template-1.png')}}" class="shadow-lg theme-img" alt="">
                    <div class="select">Selected</div>
                    <div class="action">
                        <a href="javascript:void(0)" @click="openViewModal($event)">
                            <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="img" @click="selectItem($event, 2)">
                    <div class="select">Selected</div>
                    <img src="{{asset('/images/theme-selection/template-2.png')}}" class="shadow-lg theme-img" alt="">
                    <div class="action">
                        <a href="javascript:void(0)" @click="openViewModal($event)">
                            <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="img" @click="selectItem($event, 3)">
                    <div class="select">Selected</div>
                    <img src="{{asset('/images/theme-selection/template-3.png')}}" class="shadow-lg theme-img" alt="">
                    <div class="action">
                        <a href="javascript:void(0)" @click="openViewModal($event)">
                            <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="img" @click="selectItem($event, 4)">
                    <div class="select">Selected</div>
                    <img src="{{asset('/images/theme-selection/template-4.png')}}" class="shadow-lg theme-img" alt="">
                    <div class="action">
                        <a href="javascript:void(0)" @click="openViewModal($event)">
                            <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="img" @click="selectItem($event, 5)">
                    <div class="select">Selected</div>
                    <img src="{{asset('/images/theme-selection/template-5.png')}}" class="shadow-lg theme-img" alt="">
                    <div class="action">
                        <a href="javascript:void(0)" @click="openViewModal($event)">
                            <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade view-modal" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="img">
                        <img :src="img" alt="">
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    new Vue({
        el: '#theme-selection',
        data: {
            img: null,
            id: 2
        },

        methods: {
            openViewModal(e){
                const src = e.target.closest('.img').querySelector('.theme-img').src;
                this.img = src
                console.log(src)
                const myModal = new bootstrap.Modal(document.getElementById('viewModal'), {})
                myModal.show()
            },

            selectItem(e, id){
                const selectItems = document.querySelectorAll('.selection-items .img');
                const currentItem = e.target.closest('.img');
                selectItems.forEach(item => {
                    if(item === currentItem){
                        item.classList.add('active')
                    }else{
                        item.classList.remove('active')
                    }
                })
                this.id = id;
                console.log(id, this.id)
            }
        },

        mounted(){
        }
    })
</script>
@endsection
