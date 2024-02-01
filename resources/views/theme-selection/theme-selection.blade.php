@extends('layout.generate-layout')
@section('content')
<div class="theme-selection" id="theme-selection">
    {{--header--}}
    <header class="py-3 px-1 px-sm-5 shadow-sm fixed-top bg-white">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{route('landing.page')}}" class="d-inline-block logo">
                <img src="{{asset('/images/landing-page/revealify.png')}}" width="200" alt="">
            </a>
            <a href="{{route('generate.selected', ['id'=> 1])}}" class="btn btn-aqua-blue rounded-pill" v-if="isSelected">Next</a>
            <button class="btn btn-aqua-blue rounded-pill disabled" v-if="!isSelected">Next</button>
        </div>
    </header>

    <div class="page_content">
        <div class="container">
            <h2 class="page_title">Theme Selection</h2>
            <div class="selection-items">
                <div class="img" @click="selectItem($event, 1)">
                    <img src="{{asset('/images/theme-selection/template-1.png')}}" class="shadow-lg theme-img" alt="">
                    <div class="select">Selected</div>
                    <a href="javascript:void(0)" class="action" @click="openViewModal($event)">
                        <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                    </a>
                </div>
                <div class="img" @click="selectItem($event, 2)">
                    <div class="select">Selected</div>
                    <img src="{{asset('/images/theme-selection/template-2.png')}}" class="shadow-lg theme-img" alt="">
                    <a href="javascript:void(0)" class="action" @click="openViewModal($event)">
                        <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                    </a>
                </div>
                <div class="img" @click="selectItem($event, 3)">
                    <div class="select">Selected</div>
                    <img src="{{asset('/images/theme-selection/template-3.png')}}" class="shadow-lg theme-img" alt="">
                    <a href="javascript:void(0)" class="action" @click="openViewModal($event)">
                        <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                    </a>
                </div>
                <div class="img" @click="selectItem($event, 4)">
                    <div class="select">Selected</div>
                    <img src="{{asset('/images/theme-selection/template-4.png')}}" class="shadow-lg theme-img" alt="">
                    <a href="javascript:void(0)" class="action" @click="openViewModal($event)">
                        <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                    </a>
                </div>
                <div class="img" @click="selectItem($event, 5)">
                    <div class="select">Selected</div>
                    <img src="{{asset('/images/theme-selection/template-5.png')}}" class="shadow-lg theme-img" alt="">
                    <a href="javascript:void(0)" class="action" @click="openViewModal($event)">
                        <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                    </a>
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
            id: 1,
            isSelected: false
        },

        methods: {
            openViewModal(e){
                e.stopPropagation();
                const src = e.target.closest('.img').querySelector('.theme-img').src;
                this.img = src;
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
                this.isSelected = true;
            }
        },

        mounted(){
        }
    })
</script>
@endsection
