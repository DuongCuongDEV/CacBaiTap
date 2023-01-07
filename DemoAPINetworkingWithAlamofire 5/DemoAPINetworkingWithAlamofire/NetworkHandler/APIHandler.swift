//
//  APIHandler.swift
//  DemoAPINetworkingWithAlamofire
//
//  Created by blackhat on 22/09/2022.
//

import Foundation
import Alamofire

class APIHandler {
    func getFriends(completion: @escaping (Friends) -> ()) {
        AF.request("https://625c2d5cc9e78a8cb9b4cec1.mockapi.io/friends", method: .get).responseDecodable(of: Friends.self) { (response) in
            if let friendsResponse = response.value {
                completion(friendsResponse)
            }
        }
    }
    
    func createAFriend(completion: @escaping (Friend) -> ()) {
        let fullName = "Nguyễn Khả Chương"
        let params: Parameters = [
                "name": fullName,
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/646.jpg" ,
                "anhDaiDien": "http://loremflickr.com/640/480/business"
            ]
            
        AF.request("https://625c2d5cc9e78a8cb9b4cec1.mockapi.io/friends", method: .post, parameters: params, encoding: JSONEncoding.default, headers: nil).responseDecodable(of: Friend.self) { response in
            if let friendResponse = response.value {
                completion(friendResponse)
            }
        }
    }
}
