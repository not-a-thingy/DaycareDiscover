// ignore_for_file: must_be_immutable

part of 'article_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///Article widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class ArticleEvent extends Equatable {}

/// Event that is dispatched when the Article widget is first created.
class ArticleInitialEvent extends ArticleEvent {
  @override
  List<Object?> get props => [];
}

///Event for changing ChipView selection
class UpdateChipViewEvent extends ArticleEvent {
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
