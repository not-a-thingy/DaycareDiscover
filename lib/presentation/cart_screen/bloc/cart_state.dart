// ignore_for_file: must_be_immutable

part of 'cart_bloc.dart';

/// Represents the state of Cart in the application.
class CartState extends Equatable {
  CartState({this.cartModelObj});

  CartModel? cartModelObj;

  @override
  List<Object?> get props => [
        cartModelObj,
      ];
  CartState copyWith({CartModel? cartModelObj}) {
    return CartState(
      cartModelObj: cartModelObj ?? this.cartModelObj,
    );
  }
}
