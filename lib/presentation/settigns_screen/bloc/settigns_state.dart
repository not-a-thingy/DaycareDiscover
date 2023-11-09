// ignore_for_file: must_be_immutable

part of 'settigns_bloc.dart';

/// Represents the state of Settigns in the application.
class SettignsState extends Equatable {
  SettignsState({this.settignsModelObj});

  SettignsModel? settignsModelObj;

  @override
  List<Object?> get props => [
        settignsModelObj,
      ];
  SettignsState copyWith({SettignsModel? settignsModelObj}) {
    return SettignsState(
      settignsModelObj: settignsModelObj ?? this.settignsModelObj,
    );
  }
}
