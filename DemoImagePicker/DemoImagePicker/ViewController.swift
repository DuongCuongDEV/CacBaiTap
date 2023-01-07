//
//  ViewController.swift
//  DemoImagePicker
//
//  Created by Huy on 19/10/2022.
//

import UIKit
import CoreLocation

class ViewController: UIViewController, UIImagePickerControllerDelegate, UINavigationControllerDelegate, CLLocationManagerDelegate {
    
    let locationMangger = CLLocationManager()
    
    @IBOutlet weak var lblLocation: UILabel!
    
    @IBOutlet weak var imgAvatar: UIImageView!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        locationMangger.delegate = self
        
        locationMangger.distanceFilter = 15
        locationMangger.desiredAccuracy = kCLLocationAccuracyBest
        locationMangger.requestAlwaysAuthorization()
        locationMangger.startUpdatingLocation()
    }

    @IBAction func btnSetAvatar(_ sender: UIButton) {
        let imagePickerVC = UIImagePickerController()
        imagePickerVC.sourceType = .photoLibrary
        imagePickerVC.delegate = self
        present(imagePickerVC, animated: true, completion: nil)
    }
    func imagePickerController(_ picker: UIImagePickerController, didFinishPickingMediaWithInfo info: [UIImagePickerController.InfoKey : Any]) {
        picker.dismiss(animated: true, completion: nil)
        if let image = info[.originalImage] as? UIImage {
            imgAvatar.image = image
        }
    }
    
//    @IBAction func btnGetLocation(_ sender: UIButton) {
//        locationMangger.requestAlwaysAuthorization()
//    }
    
    func locationManagerDidChangeAuthorization(_ manager: CLLocationManager) {
        
    }
    
    func locationManager(_ manager: CLLocationManager, didFailWithError error: Error) {
        
    }
    
    func locationManager(_ manager: CLLocationManager, didUpdateLocations locations: [CLLocation]) {
        let lastLocation = locations.last
        lblLocation.text = "Kinh đô: \(lastLocation!.coordinate.longitude) Vĩ độ: \(lastLocation!.coordinate.latitude)"
       

    }
}

