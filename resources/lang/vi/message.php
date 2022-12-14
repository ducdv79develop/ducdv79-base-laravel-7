<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Messages follow screen
    |--------------------------------------------------------------------------
    */
    'common' => [
        'result' => 'Kết quả',
        'action' => 'Tùy chọn',
        'search' => 'Tìm kiếm',
        'create' => 'Thêm mới',
        'edit' => 'Chỉnh sửa',
        'detail' => 'Chi tiết',
        'cancel' => 'Hủy bỏ',
        'back' => 'Quay lại',
        'submit' => 'Lưu lại',
        'delete' => 'Xóa bỏ',
        'unknown' => 'Không tìm thấy',
        'no_data' => 'Không có dữ liệu',
        'blank' => 'null',
        'no_select' => 'Chưa chọn',
        'confirm' => 'Xác nhận',
        'storage' => 'Lưu trữ',
        'upload' => 'Tải lên',
        'download' => 'Tải xuống',
        'just_now' => 'Vừa xong',
        'year' => 'năm',
        'month' => 'tháng',
        'day' => 'ngày',
        'hour' => 'giờ',
        'minute' => 'phút',
        'second' => 'giây',
        'about' => 'Khoảng',
        'ago' => 'trước',
    ],
    'member' => [
        'table' => [
            'title' => 'Quản lý tài khoản',
            'search' => 'Tìm kiếm tài khoản',
            'full_name' => 'Họ tên',
            'phone' => 'Điện thoại',
            'email' => 'Email',
            'address' => 'Địa chỉ',
            'status' => 'Trạng thái',
            'timeout' => 'Thời hạn',
            'updated_by' => 'Cập nhật',
            'role' => 'Quyền hạn',
            'point' => 'Điểm',
        ],
        'form' => [
            'create' => 'Đăng ký hội viên',
            'edit' => 'Chỉnh sửa hội viên',
            'name' => 'Họ và Tên',
            'phone' => 'Điện thoại',
            'password' => 'Mật khẩu',
            'email' => 'Email',
            'address' => 'Địa chỉ',
            'birthday' => 'Ngày sinh',
            'gender' => 'Giới tính',
            'timeout' => 'Hạn sử dụng',
            'timeout_res' => 'Ngày hết hạn',
            'timeout_free' => 'Dùng thử',
            'timeout_free_checked' => 'Đăng ký (7 ngày)',
            'created_by' => 'Người thêm',
            'updated_by' => 'Người chỉnh sửa',
            'role' => 'Quyền hạn',
        ],
        'gender' => [
            'male' => 'Nam',
            'female' => 'Nữ',
            'unknown' => 'Không xác định',
        ],
        'profile' => [
            'title' => 'Thông tin cá nhân',
            'title_view' => 'Trang cá nhân',
            'information' => 'Thông tin',
            'update_profile' => 'Cập nhật',
            'change_password' => 'Đổi mật khẩu',
            'name' => 'Tên',
            'phone' => 'Điện thoại',
            'phone_note' => '*Chú ý! Số điện thoại là tài khoản đăng nhập.',
            'email' => 'Email',
            'address' => 'Địa chỉ',
            'birthday' => 'Ngày sinh',
            'gender' => 'Giới tính',
            'last_pass' => 'Mật khẩu hiện tại',
            'new_pass' => 'Mật khẩu mới',
            'confirm_pass' => 'Xác nhận mật khẩu',
            'count_borrower' => 'Khách hàng',
            'count_trans' => 'Giao dịch',
            'count_collected' => 'Số lần thu',
        ],
        'timeout_option' => [
            1 => '1 tháng',
            2 => '2 tháng',
            3 => '3 tháng',
            6 => '6 tháng',
            12 => '12 tháng',
            18 => '18 tháng',
            24 => '24 tháng',
        ]
    ],
    'role' => [
        'table' => [
            'title' => 'Danh sách quyền hạn',
            'search' => 'Tìm kiếm quyền hạn',
            'name' => 'Tên quyền hạn',
            'code' => 'Mã code',
            'permission_count' => 'Chức năng',
            'admin_count' => 'Phân công',
            'update_at' => 'Cập nhật'
        ],
        'form' => [
            'create' => 'Tạo mới quyền hạn',
            'edit' => 'Chỉnh sửa quyền hạn',
            'display_name' => 'Tên quyền hạn',
            'name' => 'Mã code',
            'add_permission' => 'Danh sách chức năng'
        ],
        'permission' => [
            'title' => 'Danh sách chức năng',
            'search' => 'Tìm kiếm chức năng',
            'create' => 'Tạo mới chức năng',
            'edit' => 'Chỉnh sửa chức năng',
            'name' => 'Tên chức năng',
            'code' => 'Mã code',
            'per_child' => 'Chức năng chính',
            'update_at' => 'Cập nhật',
            'read' => 'Xem',
            'write' => 'Sửa',
            'other' => 'Khác',
        ]
    ],
];
