//
//  APIHandler.swift
//  App_Grab
//
//  Created by ChâuNT on 14/12/2022.
//

import Foundation
import Alamofire

class APIHandler {
    func getUsers(completion: @escaping (Users) -> ()) {
        AF.request("http://localhost:3000/api/dangNhap", method: .post).responseDecodable(of: Users.self) { (response) in
            if let usersResponse = response.value {
                completion(usersResponse)
            }
        }
    }
    //Thêm thông tin qua phương thức post
    func postUsers(user: User) {
        AF.request("http://localhost:3000/api/dangNhap", method: .post, parameters: user, encoder: JSONParameterEncoder.default, headers: nil).response { responce in
            switch responce.result {
            case .success(let data):
                do {
                    let json = try JSONSerialization.jsonObject(with: data!, options: .fragmentsAllowed)
                    print(json)
                } catch {
                    print(error.localizedDescription)
                }
            case .failure(let erorr):
                print(erorr.localizedDescription)
            }
        }
    }
    }
