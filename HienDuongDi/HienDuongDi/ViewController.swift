//
//  ViewController.swift
//  HienDuongDi
//
//  Created by Dương Văn Cường on 19/12/2022.
//

import UIKit
import MapKit
import CoreLocation

class ViewController: UIViewController, CLLocationManagerDelegate, MKMapViewDelegate {

    @IBOutlet weak var txt: UITextField!
    @IBOutlet weak var btn: UIButton!
    @IBOutlet weak var mapVieww: MKMapView!
    
    let locationManager = CLLocationManager()
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view.
        locationManager.delegate = self
        locationManager.desiredAccuracy = kCLLocationAccuracyBest
        locationManager.requestAlwaysAuthorization()
        locationManager.requestWhenInUseAuthorization()
        locationManager.startUpdatingLocation()
        
        mapVieww.delegate = self
        
        
        
    }

    @IBAction func btnStart(_ sender: Any) {
        getAddress()
    }
    
    
    func getAddress(){
        let geoCoder = CLGeocoder()
        geoCoder.geocodeAddressString(txt.text!) {
            (placemarks, erro) in guard let placemarks = placemarks, let location = placemarks.first?.location
            else {
                print("No location fonrd")
                return
            }
            print(location)
            self.mapThis(destinationCord: location.coordinate)
            
            let pin = MKPointAnnotation()

            pin.coordinate = location.coordinate
            self.mapVieww.addAnnotation(pin)
        }
        
    }
    
    func locationManager(_ manager: CLLocationManager, didUpdateLocations locations: [CLLocation]) {
        print(locations)
        guard let locValue: CLLocationCoordinate2D = locationManager.location?.coordinate else {return}
        
       
        let pin = MKPointAnnotation()
 
        pin.coordinate = locValue
        mapVieww.addAnnotation(pin)

        mapVieww.setRegion(MKCoordinateRegion(center: locValue, span: MKCoordinateSpan(latitudeDelta: 0.7, longitudeDelta: 0.7)), animated: true)
        
        print("location2222 \(locValue)")
        
    }
    
    func mapThis(destinationCord: CLLocationCoordinate2D){
        let souceCordinate = (locationManager.location?.coordinate)!
        
        let soucePlaceMark = MKPlacemark(coordinate: souceCordinate)
        let destPlaceMark = MKPlacemark(coordinate: destinationCord)
        
        let sourceItem = MKMapItem(placemark: soucePlaceMark)
        let destItem = MKMapItem(placemark: destPlaceMark)
        
        let destinationRequest = MKDirections.Request()
        destinationRequest.source = sourceItem
        destinationRequest.destination = destItem
        destinationRequest.transportType = .automobile
        destinationRequest.requestsAlternateRoutes = true
        
        let directions = MKDirections(request: destinationRequest)
        directions.calculate{
            (response, error) in
            guard let response = response else {
                if let error = error {
                    print("Something is wrong :")
                }
                return
            }
            let route = response.routes[0]
            self.mapVieww.addOverlay(route.polyline)
            self.mapVieww.setVisibleMapRect(route.polyline.boundingMapRect, animated: true)
            
        }
    }
    
    func mapView(_ mapView: MKMapView, rendererFor overlay: MKOverlay) -> MKOverlayRenderer {
        let render = MKPolylineRenderer(overlay: overlay as! MKPolyline)
        render.strokeColor = .blue
        return render
    }

}

