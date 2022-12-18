import { Injectable } from '@angular/core';
import { environment } from 'src/environment/environment';
import { CartLine } from '../interfaces/cart-line';
import { Product } from '../interfaces/product';

@Injectable({
  providedIn: 'root',
})
export class StorageService {
  constructor() {}

  getProductsFromLocalStorage() {
    return JSON.parse(localStorage.getItem('products') || '[]');
  }
  addProduct(product: Product, quantity: number) {
    const products: Product[] = this.getProductsFromLocalStorage();
    for (let index = 0; index < quantity; index++) {
      products.push(product);
    }
    localStorage.setItem('products', JSON.stringify(products));
  }

  getCartLines(): CartLine[] {
    const products: Product[] = this.getProductsFromLocalStorage();
    const cartLines: CartLine[] = [];
    products.forEach((p) => {
      const ix = cartLines.findIndex((x) => x.product._id === p._id);
      if (ix >= 0) {
        cartLines[ix].quantity += 1;
      } else {
        cartLines.push({
          price: p.price,
          product: p,
          quantity: 1,
        });
      }
    });
    return cartLines;
  }
}
