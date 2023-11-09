// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';
import 'cart_item_model.dart';

/// This class defines the variables used in the [cart_screen],
/// and is typically used to hold data that is passed between different parts of the application.
class CartModel extends Equatable {
  CartModel({this.cartItemList = const []});

  List<CartItemModel> cartItemList;

  CartModel copyWith({List<CartItemModel>? cartItemList}) {
    return CartModel(
      cartItemList: cartItemList ?? this.cartItemList,
    );
  }

  @override
  List<Object?> get props => [cartItemList];
}
