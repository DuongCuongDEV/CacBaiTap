//
//  friendModel.swift
//  hocLaiAPI
//
//  Created by Dương Văn Cường on 15/11/2022.
//

import Foundation
struct FriendElement: Codable {
    let name: String
    let avatar: String
    let id: String
}

typealias Friends = [FriendElement]
