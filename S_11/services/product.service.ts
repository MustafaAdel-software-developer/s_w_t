import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from 'src/environment/environment';
import { Product } from '../interfaces/product';

@Injectable({
  providedIn: 'root',
})
export class ProductService {
  clicked: number = 0;

  cartProducts: Product[] = [];

  constructor(private httpClient: HttpClient) {
    this.clicked = Number(localStorage.getItem('clicked') || '0');
  }

  isClicked() {
    this.clicked += 1;
    localStorage.setItem('clicked', JSON.stringify(this.clicked));
  }

  getFeaturedProducts(): any {
    return this.httpClient.get(`${environment.apiUrl}products/getFeatured`);
  }

  getRecentProducts(): any {
    return this.httpClient.get(`${environment.apiUrl}products/getRecent`);
  }

  getProducts(): any {
    return this.httpClient.get(`${environment.apiUrl}products`);
  }

  addProduct(product: Product): void {
    this.cartProducts.push(product);
  }

  getProductById(id: string) {
    return this.httpClient.get(`${environment.apiUrl}products/${id}`);
  }

  getProductByCategoryId(id: string) {
    return this.httpClient.get(
      `${environment.apiUrl}products/getByCategoryId${id}`
    );
  }
}
