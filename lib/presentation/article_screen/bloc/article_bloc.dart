import 'package:equatable/equatable.dart';
import 'package:flutter/material.dart';
import '/core/app_export.dart';
import '../models/topics_item_model.dart';
import '../models/trendings_item_model.dart';
import '../models/ninetyfour_item_model.dart';
import 'package:afiq_s_application2/presentation/article_screen/models/article_model.dart';
part 'article_event.dart';
part 'article_state.dart';

/// A bloc that manages the state of a Article according to the event that is dispatched to it.
class ArticleBloc extends Bloc<ArticleEvent, ArticleState> {
  ArticleBloc(ArticleState initialState) : super(initialState) {
    on<ArticleInitialEvent>(_onInitialize);
    on<UpdateChipViewEvent>(_updateChipView);
  }

  _updateChipView(
    UpdateChipViewEvent event,
    Emitter<ArticleState> emit,
  ) {
    List<TopicsItemModel> newList =
        List<TopicsItemModel>.from(state.articleModelObj!.topicsItemList);
    newList[event.index] =
        newList[event.index].copyWith(isSelected: event.isSelected);
    emit(state.copyWith(
        articleModelObj:
            state.articleModelObj?.copyWith(topicsItemList: newList)));
  }

  List<TopicsItemModel> fillTopicsItemList() {
    return List.generate(3, (index) => TopicsItemModel());
  }

  List<TrendingsItemModel> fillTrendingsItemList() {
    return [
      TrendingsItemModel(
          covidNineteen: ImageConstant.imgRectangle54,
          covidNineteen1: "Covid-19",
          description:
              "Comparing the \nAstraZeneca and \nSinovac COVID-19 \nVaccines",
          date: "Jun 12, 2021",
          time: "6 min read"),
      TrendingsItemModel(
          covidNineteen: ImageConstant.imgRectangle5487x138,
          covidNineteen1: "Covid-19",
          description:
              "The Horror Of The \nSecond Wave Of \nCOVID-19 \npandemic",
          date: "Jun 10, 2021",
          time: "5 min read")
    ];
  }

  List<NinetyfourItemModel> fillNinetyfourItemList() {
    return [
      NinetyfourItemModel(
          image: ImageConstant.imgThumbnail,
          theHealthiest:
              "The 25 Healthiest Fruits You Can Eat, According to a Nutritionist",
          date: "Jun 10, 2021 ",
          time: "5min read"),
      NinetyfourItemModel(
          image: ImageConstant.imgRectangle541,
          theHealthiest: "Traditional Herbal Medicine Treatments for COVID-19",
          date: "Jun 9, 2021 ",
          time: "8 min read")
    ];
  }

  _onInitialize(
    ArticleInitialEvent event,
    Emitter<ArticleState> emit,
  ) async {
    emit(state.copyWith(searchController: TextEditingController()));
    emit(state.copyWith(
        articleModelObj: state.articleModelObj?.copyWith(
            topicsItemList: fillTopicsItemList(),
            trendingsItemList: fillTrendingsItemList(),
            ninetyfourItemList: fillNinetyfourItemList())));
  }
}
