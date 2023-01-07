//
//  UserModel.swift
//  App_Grab
//
//  Created by ChâuNT on 14/12/2022.
//

    import Foundation

    struct User: Codable {
        let tenDangNhap: String
        let matKhau: String
        
        
        enum CodingKeys: String, CodingKey {
            case tenDangNhap = "ten_dang_nhap"
            case matKhau = "mat_khau"
        }
    }

    typealias Users = [User]
