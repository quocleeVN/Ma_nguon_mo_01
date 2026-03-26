<x-book-layout>
    <x-slot name='title'>
        {{ $data->tieu_de }}
    </x-slot>

    <style>
        .book_container {
            padding: 20px;
            background-color: #fff;
        }

        .book_info {
            display: flex;
            flex-direction: row;
            gap: 30px; /* Khoảng cách giữa ảnh và chữ */
            margin-top: 20px;
        }

        .tieu_de {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .info-1 {
            line-height: 2.2; /* Dãn dòng cho dễ đọc giống mẫu */
        }

        .info-1 b {
            color: #555;
        }

        .tac_gia_highlight {
            color: #d9534f; /* Màu đỏ cho tên tác giả giống mẫu */
            font-weight: bold;
        }

        .mo_ta_section {
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }

        .mo_ta_title {
            font-weight: bold;
            font-size: 18px;
            display: block;
            margin-bottom: 10px;
        }

        .mo_ta_text {
            text-align: justify;
            line-height: 1.6;
            color: #444;
        }
    </style>

    <div class="book_container">
        <div class="tieu_de">{{$data->tieu_de}}</div>

        <div class='book_info'>
            <div class="info-2">
                <img src="{{ asset('hinh/image/'.$data->file_anh_bia) }}" 
                     style="width: 250px; height: auto; border: 1px solid #ddd; padding: 5px;">
            </div>

            <div class="info-1">
                <span><b>Nhà cung cấp:</b> {{$data->nha_cung_cap}}</span><br>
                <span><b>Nhà xuất bản:</b> {{$data->nha_xuat_ban}}</span><br>
                <span><b>Tác giả:</b> <span class="tac_gia_highlight">{{$data->tac_gia}}</span></span><br>
                <span><b>Hình thức bìa:</b> {{$data->hinh_thuc_bia}}</span><br>
                
              
            </div>
        </div>

        <div class="mo_ta_section">
            <span class="mo_ta_title">Mô tả:</span>
            <p class="mo_ta_text">{{$data->mo_ta}}</p>
        </div>
    </div>
</x-book-layout>