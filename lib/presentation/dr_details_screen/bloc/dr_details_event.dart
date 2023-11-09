// ignore_for_file: must_be_immutable

part of 'dr_details_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///DrDetails widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class DrDetailsEvent extends Equatable {}

/// Event that is dispatched when the DrDetails widget is first created.
class DrDetailsInitialEvent extends DrDetailsEvent {
  @override
  List<Object?> get props => [];
}

///Event for changing ChipView selection
class UpdateChipViewEvent extends DrDetailsEvent {
  UpdateChipViewEvent({
    required this.index,
    this.isSelected,
  });

  int index;

  bool? isSelected;

  @override
  List<Object?> get props => [
        index,
        isSelected,
      ];
}
