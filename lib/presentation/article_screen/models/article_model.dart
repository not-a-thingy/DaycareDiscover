// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';
import 'topics_item_model.dart';
import 'trendings_item_model.dart';
import 'ninetyfour_item_model.dart';

/// This class defines the variables used in the [article_screen],
/// and is typically used to hold data that is passed between different parts of the application.
class ArticleModel extends Equatable {
  ArticleModel({
    this.topicsItemList = const [],
    this.trendingsItemList = const [],
    this.ninetyfourItemList = const [],
  });

  List<TopicsItemModel> topicsItemList;

  List<TrendingsItemModel> trendingsItemList;

  List<NinetyfourItemModel> ninetyfourItemList;

  ArticleModel copyWith({
    List<TopicsItemModel>? topicsItemList,
    List<TrendingsItemModel>? trendingsItemList,
    List<NinetyfourItemModel>? ninetyfourItemList,
  }) {
    return ArticleModel(
      topicsItemList: topicsItemList ?? this.topicsItemList,
      trendingsItemList: trendingsItemList ?? this.trendingsItemList,
      ninetyfourItemList: ninetyfourItemList ?? this.ninetyfourItemList,
    );
  }

  @override
  List<Object?> get props =>
      [topicsItemList, trendingsItemList, ninetyfourItemList];
}
