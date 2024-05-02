<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WaxingController;
use App\Http\Controllers\NailsController;
use App\Http\Controllers\HairsController;
use App\Http\Controllers\LaserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;
/*

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Homepage Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/Le-Luxe/Our-Services', [HomeController::class, 'services']);
Route::get('/Le-Luxe/Contact-us', [HomeController::class, 'contact_us']);
Route::get('/Le-Luxe/Book-Appointment', [HomeController::class, 'book']);


// Admin Routes
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/product', [AdminController::class, 'product']);

//services routes
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::post('/servicess', [ServiceController::class, 'destroy'])->name('services.destroy');

//waxing
Route::get('/waxing', [WaxingController::class, 'index'])->name('waxing.index');
Route::post('/waxing', [WaxingController::class, 'store'])->name('waxing.store');
Route::post('/waxings', [WaxingController::class, 'destroy'])->name('waxing.destroy');

//nails
Route::get('/nails', [NailsController::class, 'index'])->name('nails.index');
Route::post('/nails', [NailsController::class, 'store'])->name('nails.store');
Route::put('/nails/{nail}', [NailsController::class, 'update'])->name('nails.update');

//hair
Route::get('/hairs', [HairsController::class, 'index'])->name('hairs.index');
Route::post('/hairs', [HairsController::class, 'store'])->name('hairs.store');
Route::put('/hairs/{hairs}', [HairsController::class, 'update'])->name('hairs.update');

//laser
Route::get('/laser', [LaserController::class, 'index'])->name('laser.index');
Route::post('/laser', [LaserController::class, 'store'])->name('laser.store');
Route::post('/lasers', [LaserController::class, 'destroy'])->name('laser.destroy');


//booking
Route::get('/BookNow', [HomeController::class, 'book']);
Route::get('/Booking', [BookingController::class, 'index'])->name('booking.index');
Route::post('/Bookings', [BookingController::class, 'store'])->name('booking.store');

//contactus
Route::get('/ContactUS', [HomeController::class, 'contact'])->name('contact');
Route::post('/submit-form', [ContactFormController::class, 'submitForm'])->name('submit.form');

Route::get('/Contacts', [ContactFormController::class, 'index'])->name('contact.index');
Route::post('/contacts/{id}/accept', [ContactFormController::class, 'accept'])->name('contacts.accept');

//apointment
Route::post('/submit-appointment', [AppointmentController::class, 'store'])->name('submit.appointment');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');

Route::post('/appointments/{id}/accept', [AppointmentController::class, 'accept'])->name('appointment.accept');

Route::get('/Le-Luxe/About-Us', [HomeController::class, 'aboutus']);

//gallery
Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');

//testimonial

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial.index');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonial.store');
Route::get('/testimonials/{id}', [TestimonialController::class, 'show'])->name('testimonial.show');
Route::put('/testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
