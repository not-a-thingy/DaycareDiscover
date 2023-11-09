// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';

/// This class is used in the [topics_item_widget] screen.
class TopicsItemModel extends Equatable {
  TopicsItemModel({
    this.covidNineteen,
    this.isSelected,
  }) {
    covidNineteen = covidNineteen ?? "Covid-19";
    isSelected = isSelected ?? false;
  }

  String? covidNineteen;

  bool? isSelected;

  TopicsItemModel copyWith({
    String? covidNineteen,
    bool? isSelected,
  }) {
    return TopicsItemModel(
      covidNineteen: covidNineteen ?? this.covidNineteen,
      isSelected: isSelected ?? this.isSelected,
    );
  }

  @override
  List<Object?> get props => [covidNineteen, isSelected];
}
