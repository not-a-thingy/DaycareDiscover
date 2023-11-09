// ignore_for_file: must_be_immutable

part of 'article_bloc.dart';

/// Represents the state of Article in the application.
class ArticleState extends Equatable {
  ArticleState({
    this.searchController,
    this.articleModelObj,
  });

  TextEditingController? searchController;

  ArticleModel? articleModelObj;

  @override
  List<Object?> get props => [
        searchController,
        articleModelObj,
      ];
  ArticleState copyWith({
    TextEditingController? searchController,
    ArticleModel? articleModelObj,
  }) {
    return ArticleState(
      searchController: searchController ?? this.searchController,
      articleModelObj: articleModelObj ?? this.articleModelObj,
    );
  }
}
